<?php
class GoodsModel extends ViewModel{
	public $table ='goods';
	
	public $cids = array();	//检索的cid
	public $lids = array();	//检索的lid
	public $price = '';		//价格检索条件
	public $order = '';		//排序规则 
	
	public $view = array(
		'category'=>array(
			'type'=>'inner',
			'on'=>'category.cid=goods.cid'			
		),
		'locality'=>array(
				'type'=>'inner',
				'on'=>'locality.lid=goods.lid'
		),
		'shop'=>array(
				'type'=>'inner',
				'on'=>'shop.shopid=goods.shopid'
		)	
	);
	/**
	 * 获取商品的总数据
	 */
	public function getGoodsTotal(){
		$count = 0;
		$where = rtrim('end_time>'.time().' and '.$this->price,' and ');
		//两个条件都存在的情况
		if(!empty($this->cids) && !empty($this->lids)){
			$count = $this->where($where)->in($this->cids)->in($this->lids)->count();
		}else{
			//存在分类筛选的情况
			if(!empty($this->cids)){
				$count = $this->where($where)->in($this->cids)->count();
			}
			//存在地区筛选的情况
			if(!empty($this->lids)){
				$count = $this->where($where)->in($this->lids)->count();
			}
		}
		//没有任何条件的情况
		if(empty($this->cids) && empty($this->lids)){
			$count = $this->where($where)->count();
		}
		return $count;
	}
	
	/**
	 * 查询商品
	 */
	public function getGoods($limit){
		$result = null;
		$where = rtrim('end_time>'.time().' and '.$this->price,' and ');
		$fields = array(
			'goods.gid',
			'goods.goods_img',
			'goods.main_title',
			'goods.sub_title',
			'goods.price',
			'goods.old_price',
			'goods.buy'
		);
		
		//两个条件都存在的情况
		if(!empty($this->cids) && !empty($this->lids)){
			$result = $this->field($fields)->where($where)->in($this->cids)->in($this->lids)->order($this->order)->limit($limit)->select();
		}else{
			//存在分类筛选的情况
			if(!empty($this->cids)){
				$result = $this->field($fields)->where($where)->in($this->cids)->order($this->order)->limit($limit)->select();
			}
			//存在地区筛选的情况
			if(!empty($this->lids)){
				$result = $this->field($fields)->where($where)->in($this->lids)->order($this->order)->limit($limit)->select();
			}
		}
		//没有任何条件的情况
		if(empty($this->cids) && empty($this->lids)){
			$result = $this->field($fields)->where($where)->order($this->order)->limit($limit)->select();
		}
		return $result;
	}
}
















?>