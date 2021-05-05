<?php
	namespace App\AbstractClasses;

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * Usado para os Models que sejam para fazer ligação ás duas base de dados.
	 */
	abstract class SyncModel extends Model
	{
		/**
		 * Armazena o path da class que será sincronizada. Possibilita o instanciamento. Obrigatorio definir na class que for extendida.
		 * @var string
		 */
		protected static $class = null;

		/**
		 * Usado para fazer a correspondencia entre as colunas MySql e Sql. Array Multidemencinal em que a Key corresponde á coluna MySql e o Valor à coluna Sql.
		 * @var array
		 */
		protected static $syncColumns = [];

		/**
		 * Usado para alterar valores das colunas de sincronização (apenas Colunas de Sql). Estrutura igual a SyncColumns mas apenas colocamos as que queremmos substituir.
		 * @var array
		 */
		protected static $exceptionsChange = [];

		/**
		 * Usado para adicionar colunas a syncColumns
		 * @var array
		 */
		protected static $exceptionsAdd = [];

		/**
		 * Usado para remover colunas da syncColumns
		 * @var array
		 */
		protected static $exceptionsRemove = [];

		/**
		* Obtem as Colunas da Tabela
		*
		* Consulta a tabela e retorna uma lista das colunas da mesma.
		*
		* @return array 	Array Multidimensional com as Colunas do MySql como Key e as Colunas Sql como Value
		*/
		public static function getColumns()
		{
			$formattedColumns = [];
			$classPath = static::$class ?: static::class;
			$table = (new $classPath)->getTable();
			$columns = Schema::getColumnListing($table);
			// dump(static::$exceptionsRemove);
			foreach ($columns as $key => $value):
				$formattedColumns[$value] = $value;
			endforeach;
			return $formattedColumns;
		}

		/**
		* Gera Array Multidimensional $syncColumns
		*
		* Gera um array multidimensional automáticamente com as colunas MySql e Sql. Em que as Keys são as Colunas MySql e os Values são as colunas Sql. Se a $syncColumns for geradas manualmente esta função retorna o array manual. Se forem adicionadas excepcções através das variaveis ($exceptionsChange, $exceptionsAdd, $exceptionsRemove) é gerado um novo array com essas mesmas modificações.
		*
		* @return array 	Array $syncColumns
		*/
		public static function makeSyncColumns()
		{
			// static::$syncColumns
			$syncColumns = !static::$syncColumns ? self::getColumns() : static::$syncColumns;
			$syncColumns =  static::$exceptionsChange ? array_merge($syncColumns, static::$exceptionsChange) : $syncColumns;
			if(static::$exceptionsAdd):
				foreach (static::$exceptionsAdd as $key => $value):
					$syncColumns[$key] = $value;
				endforeach;
			endif;
			if(static::$exceptionsRemove):
				foreach (static::$exceptionsRemove as $value):
					$aKey = \array_search($value, $syncColumns);
					if($aKey):
						unset($syncColumns[$aKey]);
					endif;
				endforeach;
			endif;

			// $syncColumns = self::$exceptionsRemove

			return $syncColumns;
		}

		/**
		* Gera Query selecção Sql
		*
		*	Gera a String de selecção de colunas para a Query de Sql
		*
		* @return string  Colunas Sql a Selecionar na query
		*/
		public static function getSelectStringSql()
		{
			$selectArray = [];
			$syncColumns = static::makeSyncColumns();

			foreach ($syncColumns as $key => $column) :
				array_push($selectArray, $column . ' as ' . $key);
			endforeach;

			return $selectArray;
		}

		/**
		* Gera Query selecção MySql
		*
		*	Gera a String de selecção de colunas para a Query de MySql
		*
		* @return string 	Colunas MySql a Selecionar na query
		*/
		public static function getSelectStringMySql()
		{
			$selectArray = [];
			$syncColumns = static::makeSyncColumns();

			foreach ($syncColumns as $key => $column) :
				if ($key === 'last_update') :
					continue;
				endif;
				array_push($selectArray, $key);
			endforeach;

			return $selectArray;
		}

		/**
		* Obtem valor da Propriedade $SyncColumns
		*
		*	Obtem o Array multidimensional $syncColumns
		*
		* @return array 	Array multidimensional $syncColumns
		*/
		public static function getSyncColumns()
		{
			return static::makeSyncColumns();
		}
	}