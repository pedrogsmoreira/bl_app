<?php

namespace App\Models\Products;

use App\Models\TempFolder;
use App\Models\Products\ArtCol;
use App\Models\Products\Volume;
use App\Models\Documents\Vdlenc;
use App\Models\Documents\Vdlorc;
use App\Models\Products\Artforn;
use App\Models\Products\Catprod;
use App\Models\Documents\VdlDocs;
use App\Models\Products\Artimagn;
use App\Models\Products\NumSerie;
use App\AbstractClasses\SyncModel;
use App\Models\Simulator\Referart;
use Illuminate\Support\Facades\DB;
use App\Helper\Filters\QueryFilter;
use App\Models\Products\Subcatprod;
use App\Models\Products\ProductFile;
use App\Models\Products\ZxRugMPrice;
use App\Models\Stock\ZxNSAgrupStock;
use Illuminate\Support\Facades\Auth;
use App\Models\Simulator\Zx_upcartgrau;
use App\Models\Simulator\Vldfieldoption;
use App\Models\Materials\Fabrics\FabricFootage;
use App\Models\Products\ZxProductSpecification;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class que gere os artigos
 *
 * Este Model serve como Objecto de ligação com a tabela da BD através do ORM Eloquent. A tabela da BD armazena os dados dos artigos.
 */
class Artigo extends SyncModel
{
	protected static $class = self::class;

	protected static $syncColumns = ['codigo' => 'Codigo', 'descricao' => 'Descricao', 'abreviatura' => 'Abreviatura', 'familia' => 'Familia', 'unidade' => 'Unidade', 'iva' => 'Iva', 'dataCriacao' => 'DataCriacao', 'precoVenda1' => 'PrecoVenda1', 'precoVenda2' => 'PrecoVenda2', 'precoF1' => 'PrecoF1', 'precoF2' => 'PrecoF2', 'comprimento' => 'Comprimento', 'largura' => 'Largura', 'versao' => 'Versao', 'areaM2' => 'AreaM2', 'volumeM3' => 'VolumeM3', 'volumeBrutoM3' => 'VolumeBrutoM3', 'peso' => 'Peso', 'numeroVolumes' => 'NumeroVolumes', 'categoria' => 'Categoria', 'codigoPautal' => 'CodigoPautal', 'obs' => 'Obs', 'inactivo' => 'Inactivo', 'coleccao' => 'Coleccao', 'modelo' => 'Modelo', 'tipoArtigo' => 'TipoArtigo', 'codArtigo' => 'CodArtigo', 'url' => 'Url', 'web_url' => 'web_url', 'tipoDoc' => 'TipoDoc', 'profundidade' => 'Profundidade', 'catProd' => 'CatProd', 'subCatProd' => 'SubCatProd', 'tipo' => 'Tipo', 'altura' => 'Altura', 'alturaAssento' => 'AlturaAssento', 'profundAssento' => 'ProfundAssento', 'alturaBracos' => 'AlturaBracos', 'diametro' => 'Diametro', 'diametro2' => 'Diametro2', 'acab01' => 'Acab01', 'acab02' => 'Acab02', 'acab03' => 'Acab03', 'acab04' => 'Acab04', 'acab05' => 'Acab05', 'acab06' => 'Acab06', 'acab07' => 'Acab07', 'acab08' => 'Acab08', 'acab09' => 'Acab09', 'acab10' => 'Acab10', 'acab11' => 'Acab11', 'acab12' => 'Acab12', 'acab13' => 'Acab13', 'acab14' => 'Acab14', 'acab15' => 'Acab15', 'acab16' => 'Acab16', 'acab17' => 'Acab17', 'acab18' => 'Acab18', 'acab19' => 'Acab19', 'acab20' => 'Acab20', 'acab21' => 'Acab21', 'acab22' => 'Acab22', 'acab23' => 'Acab23', 'acab24' => 'Acab24', 'acab25' => 'Acab25', 'cablagem' => 'Cablagem', 'lampada' => 'Lampada', 'dimmer' => 'Dimmer', 'qtd01' => 'Qtd01', 'extras' => 'Extras', 'ral' => 'Ral', 'tipoLampada' => 'TipoLampada', 'selecao' => 'Selecao', 'tipoEmbal' => 'TipoEmbal', 'firer' => 'Firer', 'inter' => 'Inter', 'leadTime' => 'LeadTime', 'leadtimec' => 'leadtimec', 'majValor' => 'MajValor', 'majPercent' => 'MajPercent', 'artGen' => 'ArtGen', 'web' => 'web', 'last_update' => 'last_update'];

	protected $guarded = [];
	/**
     * Scope de Eloquent ORM
     *
     * Scope usado para dispoltar filtros nas queries. Usado como Função de Eloquent filter()
     *
     * @param   QueryBuilder        $builder        Instancia de QueryBuilder
     * @param   QueryFilter         $filters        Abstract Class QueryFilter
     * @return  builder
     */
	public function scopeFilter(Builder $builder, QueryFilter $filters)
	{
		return $filters->apply($builder);
	}

	/**
	 * Relação HasMany com Model Vdlenc
	 *
	 * Relaciona-se com o model {@see Vdlenc Vdlenc} com uma relação HasMany. Obtem as linhas de PO em que o produto em questaão é referenciado
	 *
	 * @return relation 	Relação HasMany
	 */
	public function purchaseOrderLines()
	{
		return $this->hasMany(Vdlenc::class, 'artigo', 'codigo');
	}

	/**
	 * Relação BelongsTo com Model Catprod
	 *
	 * Relaciona-se com o model {@see Catprod Catprod} com uma relação BelongsTo. Obtem a categoria a que pertence o artigo em questão
	 *
	 * @return relation 	Relação BelongsTo
	 */
	public function category()
	{
		return $this->belongsTo(Catprod::class, 'catProd', 'codigo')->select('codigo', 'descricao');
	}

	/**
	 * Relação BelongsTo com Model SubCatProd
	 *
	 * Relaciona-se com o model {@see SubCatProd SubCatProd} com uma relação BelongsTo. Obtem a sub categoria a que pertence o artigo em questão
	 *
	 * @return relation 	Relação BelongsTo
	 */
	public function sub_category()
	{
		return $this->belongsTo(Subcatprod::class, 'subCatProd', 'codigo')->select('codigo', 'marca', 'descricao');
	}

	/**
	 * Relação HasMany com Model Artforn
	 *
	 * Relaciona-se com o model {@see Artforn Artforn} com uma relação HasMany. Obtem os fornecedores que estão relacionados com o produto em questão
	 *
	 * @return relation 	Relação HasMany
	 */
	public function supplierRelatedProduct()
	{
		return $this->hasMany(Artforn::class, 'artigo', 'codigo');
	}

	/**
	 * Relação HasMany com Model Artforn (shirt version)
	 *
	 * Relaciona-se com o model {@see Artforn Artforn} com uma relação HasMany. Obtem os fornecedores que estão relacionados com o produto em questão
	 *
	 * @return relation 	Relação HasMany
	 */
	public function shortSupplierRelatedProduct()
	{
		return $this->supplierRelatedProduct()->select('artigo', 'artigoFornecedor', 'descricao', 'unidade', 'prazoMedioEntrega', 'preco', 'fornecedor');
	}

	/**
	 * Relação HasMany com Model NumSerie
	 *
	 * Relaciona-se com o model {@see NumSerie NumSerie} com uma relação HasMany. Obtem todos os numeros de seri de todos os artigos da referencia que foram produzidos
	 *
	 * @return relation 	Relação HasMany
	 */
	public function num_series()
	{
		return $this->hasMany(NumSerie::class, 'artigo', 'codigo');
	}

	/**
	 * Relação BelongsTo com Model Familia
	 *
	 * Relaciona-se com o model {@see Familia Familia} com uma relação BelongsTo. Obtem a marca a que pertence o artigo em questão
	 *
	 * @return relation 	Relação BelongsTo
	 */
	public function brand()
	{
		return $this->belongsTo(Familia::class, 'familia', 'codigo')->select('codigo', 'descricao');
	}

	/**
	 * Relação HasMany com Model ArtCol
	 *
	 * Relaciona-se com o model {@see ArtCol ArtCol} com uma relação HasMany. Obtem as colecções a que o artigo em questão está associado
	 *
	 * @return relation 	Relação HasMany
	 */
	public function artCols()
	{
		return $this->hasMany(ArtCol::class, 'artigo', 'codigo');
	}

	/**
	 * Relação HasMany com Model Zx_upcartgrau
	 *
	 * Relaciona-se com o model {@see Zx_upcartgrau Zx_upcartgrau} com uma relação HasMany. Obtem Preço por graus referentes ao artigo
	 *
	 * @return relation 	Relação HasMany
	 */
	public function fabricGrades()
	{
		return $this->hasMany(Zx_upcartgrau::class, 'artigo', 'codigo')->orderBy('grau', 'ASC');
	}

	/**
	 * Relação BelongsTo com Model ZxRugMPrice
	 *
	 * Relaciona-se com o model {@see ZxRugMPrice ZxRugMPrice} com uma relação BelongsTo. Obtem o preço por metro quadrado no caso dos artigos tapetes
	 *
	 * @return relation 	Relação BelongsTo
	 */
	public function rug_m_price()
	{
		return $this->belongsTo(ZxRugMPrice::class, 'codigo', 'artigo');
	}

	/**
	 * Relação HasMany com Model ZxProductSpecification
	 *
	 * Relaciona-se com o model {@see ZxProductSpecification ZxProductSpecification} com uma relação HasMany. Obtem os campos que o artigo usa
	 *
	 * @return relation 	Relação HasMany
	 */
	public function fields()
	{
		return $this->hasMany(ZxProductSpecification::class, 'Codigo', 'codigo');
	}

	/**
	 * Relação HasMany com Model ZxProductSpecification
	 *
	 * Relaciona-se com o model {@see ZxProductSpecification ZxProductSpecification} com uma relação HasMany. Obtem os campos que o artigo usa com os respectivos acabamentos e descrições
	 *
	 * @return relation 	Relação HasMany
	 */
	public function attributes($callback = null)
	{

		if($callback){
			return $callback();
			//* Do eager loading modification ...
		}

		return $this->fields()->with(['descritable', 'increasesAll', 'choices' => function($q){
			$q->relationColumn();
		}, 'afects'])->where('Catalogo', true)->orderBy('ordenacao');
	}

	/**
	 * Relação HasMany com Model ZxProductSpecification
	 *
	 * Relaciona-se com o model {@see ZxProductSpecification ZxProductSpecification} com uma relação HasMany. Obtem os campos de medida que o artigo usa com os respectivos valores
	 *
	 * @return relation 	Relação HasMany
	 */
	public function dimensions()
	{
		return $this->fields()->where('Tecnico', true)->orderBy('ordenacao');
	}

	/**
	 * Relação HasMany com Model Artimagn
	 *
	 * Relaciona-se com o model {@see Artimagn Artimagn} com uma relação HasMany. Obtem as imagens do artigo
	 *
	 * @return relation 	Relação HasMany
	 */
	public function images()
	{
		return $this->hasMany(Artimagn::class, 'codigo', 'codArtigo');
	}

	/**
	 * Relação HasMany com Model Artimagn
	 *
	 * Relaciona-se com o model {@see Artimagn Artimagn} com uma relação HasMany. Obtem as imagens do artigo
	 *
	 * @return relation 	Relação HasMany
	 */
	public function image()
	{
		return $this->hasOne(Artimagn::class, 'codigo', 'codArtigo');
	}

	/**
	 * Relação HasMany com Model Volume
	 *
	 * Relaciona-se com o model {@see Volume Volume} com uma relação HasMany. Obtem os volumes que o artigo é expedido
	 *
	 * @return relation 	Relação HasMany
	 */
	public function volumes()
	{
		return $this->hasMany(Volume::class, 'Artigo', 'codigo')->select('Artigo', 'quantidade', 'comprimento', 'largura', 'espessura', 'cubico', 'peso');
	}

	/**
	 * Relação MorphOne com Model TempFolder
	 *
	 * Relaciona-se com o model {@see TempFolder TempFolder} com uma relação MorphOne. Obtem a pasta temporaria criada a quando da edição dos dados do produto
	 *
	 * @return relation 	Relação MorphOne
	 */
	public function tempFolder()
	{
		return $this->morphOne(TempFolder::class, 'descritable', 'descritable_type', 'descritable_id', 'codigo')->where('user_id', Auth::User()->id);
	}

	/**
	 * Relação HasMany com Model Vldfieldoption
	 *
	 * Relaciona-se com o model {@see Vldfieldoption Vldfieldoption} com uma relação HasMany. Obtem as valições por campo do artigos
	 *
	 * @return relation 	Relação HasMany
	 */
	public function fieldsValidations()
	{
		return $this->hasMany(Vldfieldoption::class, 'artigo', 'codigo')->select(Vldfieldoption::getSelectStringMySql());
	}

	/**
	 * Relação BelongsTo com Model Referart
	 *
	 * Relaciona-se com o model {@see Referart Referart} com uma relação BelongsTo. Obtem o tipo de custom que o artigo é
	 *
	 * @return relation 	Relação BelongsTo
	 */
	public function customType()
	{
		return $this->belongsTo(Referart::class, 'codigo', 'referencia')->select('referencia', 'cAcab', 'cMed', 'cComCol');
	}

	/**
	 * Relação BelongsTo com Model FabricFootage
	 *
	 * Relaciona-se com o model {@see FabricFootage FabricFootage} com uma relação BelongsTo. Obtem o footage dos tecidos usados no artigo
	 *
	 * @return relation 	Relação BelongsTo
	 */
	public function fabric_footage()
	{
		return $this->belongsTo(FabricFootage::class, 'codArtigo', 'codigo');
	}

	/**
	 * Relação HasMany com Model ProductFile
	 *
	 * Relaciona-se com o model {@see ProductFile ProductFile} com uma relação HasMany. Obtem os ficheiros do artigo como product sheet, product assembly e product 2/3D
	 *
	 * @return relation 	Relação HasMany
	 */
	public function productFiles()
	{
		return $this->hasMany(ProductFile::class, 'reference', 'codArtigo')->join('product_file_types', 'product_files.file_type', '=', 'product_file_types.id')->select('product_files.reference', 'product_files.file_path AS url', 'product_file_types.description AS type', 'product_files.file_type AS type_id');
	}

	/**
	 * URL Product sheet
	 *
	 * Cria na collection final uma key com o url da Product Sheet
	 *
	 * @return 	string
	 */
	public function getProductSheetAttribute()
	{
		$file = $this->productFiles->where('type_id', 1)->first();
		if($file):
			return $file->setAppends(['size']);
		endif;
		return $file;
	}

	/**
	 * URL Product 2/3D
	 *
	 * Cria na collection final uma key com o url da Product 2/3D
	 *
	 * @return 	string
	 */
	public function getProduct23dAttribute()
	{
		$file = $this->productFiles->where('type_id', 3)->first();
		if($file):
			return $file->setAppends(['size']);
		endif;
		return $file;
	}

	/**
	 * URL Product Assembly
	 *
	 * Cria na collection final uma key com o url da Product Assembly
	 *
	 * @return  string
	 */
	public function getProductAssemblyAttribute()
	{
		$file = $this->productFiles->where('type_id', 2)->first();
		if($file):
			return $file->setAppends(['size']);
		endif;
		return $file;
	}

	/**
	 * Numero total de vendas
	 *
	 * Cria na collection final uma key com o numero total de vendas do artigo (soma de vendas de todas as referencias do artigo)
	 *
	 * @return integer
	 */
	public function getTotalSalesAttribute()
	{
		return Vdlenc::select('vdencs.numero', 'artigos.codArtigo')
		->where([
			['artigos.codArtigo', '=', $this->codigo],
			['vdencs.tipo_doc', '=', 'PO'],
			['vdencs.estado', '=', 'F']
		])
		->join('vdencs', 'vdlencs.numeroDocumento', '=', 'vdencs.numero')
		->join('artigos', 'vdlencs.referencia', '=', 'artigos.codigo')
		->groupBy('vdencs.numero', 'artigos.codArtigo')
		->get()->count();
	}

	/**
	 * Numero total de Unidades vendidas
	 *
	 * Cria na collection final uma key com o numero total de unidades vendidas (soma as unidades vendidas de cada referencias do artigo)
	 *
	 * @return integer
	 */
	public function getTotalUnitsSoldAttribute()
	{
		return Vdlenc::select('vdencs.numero', 'artigos.codArtigo', DB::raw('SUM(vdlencs.quantidade) AS quantidade'))
		->where([
			['artigos.codArtigo', '=', $this->codigo],
			['vdencs.tipo_doc', '=', 'PO'],
			['vdencs.estado', '=', 'F']
		])
		->leftJoin('vdencs', 'vdlencs.numeroDocumento', '=', 'vdencs.numero')
		->leftJoin('artigos', 'vdlencs.referencia', '=', 'artigos.codigo')
		->groupBy('vdencs.numero', 'artigos.codArtigo')
		->get()->sum('quantidade');
	}

	/**
	 * Total Vendido
	 *
	 * Cria na collection final uma key com a quantia total vendida (soma todas os totais de quantias vendidas de todas as referencias de artigo)
	 *
	 * @return 	float
	 */
	public function getTotalSoldAttribute()
	{
		return round(Vdlenc::select('vdencs.numero', 'artigos.codArtigo', DB::raw('SUM(vdlencs.totalILiquido) AS total'))
		->where([
			['artigos.codArtigo', '=', $this->codigo],
			['vdencs.tipo_doc', '=', 'PO'],
			['vdencs.estado', '=', 'F']
		])
		->join('vdencs', 'vdlencs.numeroDocumento', '=', 'vdencs.numero')
		->join('artigos', 'vdlencs.referencia', '=', 'artigos.codigo')
		->groupBy('vdencs.numero', 'artigos.codArtigo')
		->get()->sum('total'), 2);
	}

	/**
	 * Media de preço venda
	 *
	 * Cria na collection final uma key com a média de preço em que é vendido o artigo
	 *
	 * @return 	float
	 */
	public function getSellingPriceAvgAttribute()
	{
		return  $this->total_sold && $this->total_units_sold ? round(($this->total_sold / $this->total_units_sold), 2) : 0;
	}

	/**
	 * Media de Percentagem de desconto
	 *
	 * Cria na collection final uma key com a média da percentagem de desconto dado por artigo
	 *
	 * @return  integer
	 */
	public function getPercentageDiscountAvgAttribute()
	{
		$percentageDiscountAvg = Vdlenc::select('artigos.codArtigo', DB::raw('Avg((vdlencs.totalDescontos / vdlencs.totalMercadoria)) AS percentageDiscountAvg'))
		->where([
			['artigos.codArtigo', '=', $this->codigo],
			['vdencs.tipo_doc', '=', 'PO'],
			['vdencs.estado', '=', 'F']
		])
		->leftJoin('vdencs', 'vdlencs.numeroDocumento', '=', 'vdencs.numero')
		->leftJoin('artigos', 'vdlencs.referencia', '=', 'artigos.codigo')
		->groupBy('artigos.codArtigo')->first();

		return $percentageDiscountAvg ? round(($percentageDiscountAvg->percentageDiscountAvg * 100), 0) : 0;
	}

	/**
	 * Builder de query de Customs Vendidos
	 *
	 * Obtem o builder
	 *
	 * @return builder
	 */
	private function customsSoldList()
	{
		return Vdlenc::select('vdencs.numero', 'vdlencs.referencia', 'artigos.codArtigo', 'vdlencs.quantidade', 'referarts.cAcab', 'referarts.cMed', 'referarts.cComCol')
		->join('artigos', 'vdlencs.referencia', '=', 'artigos.codigo')
		->join('vdencs', function($join){
			$join->on('vdlencs.numeroDocumento', '=', 'vdencs.numero')->where('vdencs.estado', '<>', 'A')->where('vdencs.tipo_doc', '=', 'PO');
		})
		->join('referarts', 'vdlencs.referencia', '=', 'referarts.referencia')
		->where([
			['artigos.codArtigo', '=', $this->codArtigo],
			['artigos.tipo', '=', 'CUSTOM']
		]);
	}

	/**
	 * Total customs Vendidos
	 *
	 * Cria na collection final uma key com o numero total de customs vendidos do artigo
	 *
	 * @return integer
	 */
	public function getTotalCustomsSoldAttribute()
	{
		return $this->customsSoldList()->sum('vdlencs.quantidade');
	}

	/**
	 * Total de customs de medidas vendidos
	 *
	 * Cria na collection final uma key com o numero total de customs de medida vendidos do artigo
	 *
	 * @return integer
	 */
	public function getTotalCustomsMeasuresAttribute()
	{
		return $this->customsSoldList()
		->where([
			['referarts.cMed', '=', true]
		])->sum('vdlencs.quantidade');
	}

	/**
	 * Total de customs de atributos vendidos
	 *
	 * Cria na collection final uma key com o numero total de customs de atributos vendidos do artigo
	 *
	 * @return integer
	 */
	public function getTotalCustomsAttributesAttribute()
	{
		return $this->customsSoldList()
		->where([
			['referarts.cAcab', '=', true]
		])->sum('vdlencs.quantidade');
	}

	/**
	 * Total de customs de cliente vendidos
	 *
	 * Cria na collection final uma key com o numero total de customs de tecidos de cliente do artigo
	 *
	 * @return 	integer
	 */
	public function getTotalCustomsClientAttribute()
	{
		return $this->customsSoldList()
		->where([
			['referarts.cComCol', '=', true]
		])->sum('vdlencs.quantidade');
	}

	/**
	 * Numero de presenças em PQs
	 *
	 * Cria na collection final uma key com o numero total de presenças da referencia nas PQs
	 *
	 * @return 	integer
	 */
	public function getTotalQtdPqAttribute()
	{
		return Vdlorc::select('vdlorcs.numeroDocumento', 'artigos.codArtigo', DB::raw('SUM(vdlorcs.quantidade) AS QtdPq'))
		->leftJoin('vdorcs', function($join){
			$join->on('vdlorcs.numeroDocumento', '=', 'vdorcs.numero');
		})
		->leftJoin('artigos', 'vdlorcs.referencia', '=', 'artigos.codigo')
		->where([
			['artigos.codArtigo', '=', $this->codArtigo],
			['vdorcs.estado', '<>', 'A']
		])
		->groupBy('vdlorcs.numeroDocumento', 'artigos.codArtigo')->get()->sum('QtdPq');
	}

	/**
	 * Numero de presenças em FPs
	 *
	 * Cria na collection final uma key com o numero total de presenças da referencia nas FPs
	 *
	 * @return 	integer
	 */
	public function getTotalQtdFpAttribute()
	{
		return VdlDocs::select('vdl_docs.numeroDocumento', 'artigos.codArtigo', DB::raw('SUM(vdl_docs.quantidade) AS QtdFp'))
		->leftJoin('vd_docs', function($join){
			$join->on('vdl_docs.numeroDocumento', '=', 'vd_docs.numero');
		})
		->leftJoin('artigos', 'vdl_docs.referencia', '=', 'artigos.codigo')
		->where([
			['artigos.codArtigo', '=', $this->codArtigo],
			['vd_docs.estado', '<>', 'A']
		])
		->groupBy('vdl_docs.numeroDocumento', 'artigos.codArtigo')->get()->sum('QtdFp');
	}

	/**
	 * Numero de presenças em POs
	 *
	 * Cria na collection final uma key com o numero total de presenças da referencia nas POs
	 *
	 * @return 	integer
	 */
	public function getTotalQtdPoAttribute()
	{
		return Vdlenc::select('vdlencs.numeroDocumento', 'artigos.codArtigo', DB::raw('SUM(vdlencs.quantidade) AS QtdPo'))
		->leftJoin('vdencs', function($join){
			$join->on('vdlencs.numeroDocumento', '=', 'vdencs.numero');
		})
		->leftJoin('artigos', 'vdlencs.referencia', '=', 'artigos.codigo')
		->where([
			['artigos.codArtigo', '=', $this->codArtigo],
			['vdencs.estado', '<>', 'A'],
			['vdencs.tipo_doc', '=', 'PO']
		])
		->groupBy('vdlencs.numeroDocumento', 'artigos.codArtigo')->get()->sum('QtdPo');
	}

	/**
	 * Taxa de Converção de PQ para FP
	 *
	 * Cria na collection final uma key com a taxa de conversao das PQ para FP
	 *
	 * @return float
	 */
	public function getRatioPqToFpConversionAttribute()
	{
		return $this->total_qtd_fp && $this->total_qtd_pq ? round((($this->total_qtd_fp / $this->total_qtd_pq) * 100), 0) : 0;
	}

	/**
	 * Taxa de Converção de FP para PO
	 *
	 * Cria na collection final uma key com a taxa de conversao das FP para PO
	 *
	 * @return float
	 */
	public function getRatioFpToPoConversionAttribute()
	{
		return $this->total_qtd_po && $this->total_qtd_fp ? round((($this->total_qtd_po / $this->total_qtd_fp) * 100), 0) : 0;
	}

	/**
	 * Obtem o stock vendavel da referencia
	 *
	 * Cria na collection final uma key com um objecto com os stocks vendáveis
	 *
	 * @return float 					Total RTS e CEM stock (stock de reparação nao incluido)
	 */
	public function getStockAttribute()
	{
		return ZxNSAgrupStock::where([
			['Artigo', 'like', $this->codigo . '%'],
			['Sector', '<>', 'WARINT'],
			['Local', 'like', 'RTS.STK']
		])
		->orWhere([
			['Artigo', 'like', $this->codigo . '%'],
			['Sector', '<>', 'WARINT'],
			['Local', 'like', 'CEM.OUT']
		])
		->orWhere([
			['Artigo', 'like', $this->codigo . '%'],
			['Sector', '<>', 'WARINT'],
			['Local', 'like', 'CEM.FEI']
		])
		->get();
	}

	/**
	 * Obtem todo o stock do artigo
	 *
	 * Cria na collection final uma key com um objecto com todo o stock de todas as localizações
	 *
	 * @return float 					Total de stock de artigo (inclui ferias, reparação, stock etc)
	 */
	public function getAllStockAttribute()
	{
		return ZxNSAgrupStock::select(DB::raw('Artigo, Local, DescricaoLocal, SUM(Quantidade) AS Quantidade'))
		->where([
			['Artigo', 'like', $this->codigo . '%']
		])
		->groupBy('Local')
		->get();
	}

	/**
	 * Total Stock Pronto a Expedir
	 *
	 * Cria na collection final uma key com o total de stock pronto a vender
	 *
	 * @return 	float 					Total RTS stock
	 */
	public function getStockRtsAttribute()
	{
		return ZxNSAgrupStock::select(DB::raw('Artigo, Local, DescricaoLocal, Sector, NomeSector, SUM(Quantidade) AS Quantidade'))
		->where([
			['Artigo', 'like', $this->codigo . '%'],
			['Sector', '<>', 'WARINT'],
			['Local', 'like', 'RTS.STK']
		])
		->groupBy('Artigo', 'Local', 'Sector')
		->get()->sum('Quantidade');
	}

	/**
	 * Total Stock Feira
	 *
	 * Cria na collection final uma key com o total de stock feira
	 *
	 * @return 	float 					Total CEM.FEI
	 */
	public function getStockFeiraAttribute()
	{
		return ZxNSAgrupStock::Where([
			['Artigo', 'like', $this->codigo . '%'],
			['Sector', '<>', 'WARINT'],
			['Local', 'like', 'CEM.FEI']
		])
		->groupBy('Artigo', 'Local', 'Sector')
		->get()->sum('Quantidade');
	}

	/**
	 * Total Stock Outlet
	 *
	 * Cria na collection final uma key com o total de stock outlet
	 *
	 * @return 	float 					Total CEM.OUT
	 */
	public function getStockOutletAttribute()
	{
		return ZxNSAgrupStock::Where([
			['Artigo', 'like', $this->codigo . '%'],
			['Sector', '<>', 'WARINT'],
			['Local', 'like', 'CEM.OUT']
		])
		->groupBy('Artigo', 'Local', 'Sector')
		->get()->sum('Quantidade');
	}
}
