<?php
namespace App\Domain\Initiative\Queries;

use BlueFission\Connections\Database\MysqlLink;
use App\Domain\Initiative\Models\AttributeModel as Model;

use App\Domain\Initiative\Queries\IAllAttributesQuery;

class AllAttributesQuerySql implements IAllAttributesQuery {
	private $_model;

	public function __construct( MysqlLink $link, Model $model )
	{
		$link->open();

		$this->_model = $model;
	}

	public function fetch() 
	{
		$model = $this->_model;
		$model->read();
		$data = $model->result()->toArray();
		return $data;
	}
}