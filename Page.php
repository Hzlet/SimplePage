<?php
class Page{
	private $p;//当前页码
	private $count;
	private $num;
	private $pnum;


	//构造方法
	/**
	*@param count 总共几条数据
	*@param num   每页的条数
	*@param pnum  页码展示几个
	*@param arr 传入的参数
	*/
	public function __CONSTRUCT($count, $num, $pnum,$arr)
	{
		error_reporting(0);

		$p = is_numeric($_GET['p']) ? $_GET['p'] ? $_GET['p'] : 1 : 1;
		$max = ceil($count / $num);


		//不能超出最大的分页
		if($p > $max){
			$this->p = $max;
		}else if($p < 0){
			$this->p = 1;
		}else{
			$this->p = $p;
		}

		//传入的分页数不能超过最大的页码
		if($pnum > $max){
			$this->pnum = $max;
		}else{
			$this->pnum = $pnum;
		}

		$this->count = $count;
		$this->num = $num;

	}

	//获取limit
	public function getLimit()
	{
		$tmp = ($this->p - 1) * $this->num;
		return "limit $tmp, {$this->num}";
	}

	//码数
	public function getShow()
	{
		$half = ceil($this->pnum / 2);
		$max = ceil($this->count / $this->num);

		//最开头
		if(($this->p - $half) < 1){
			$cur = 1;
		}else if(($this->p + $this->pnum - $half) > $max){//最末
			$cur = $max - $this->pnum + 1;
		}else{//正常
			$cur = $this->p - $half;
		}
		for ($i=0; $i < $this->pnum; $i++) { 
			$tmp = $cur + $i;
			if($tmp == $this->p){
				$show .= '<a href="?p=' . $tmp . '" class="cur">' . $tmp . '</a> ';
			}else{
				$show .= '<a href="?p=' . $tmp . '">' . $tmp . '</a> ';
			}
		}
		$pre = $this->p - 1;
		$aft = $this->p + 1;

		if($this->p == 1){
			$show = "{$this->count}条记录  {$this->p}/{$max}页<a href='?p=1' class='special'>首页 </a>" 
			. $show . "<a href='?p={$aft}' class='special2' >下一页 </a><a href='?p={$max}' class='special' >尾页 </a>";

		}else if($this->p == $max){
			$show = "{$this->count}条记录  {$this->p}/{$max}页<a href='?p=1' class='special'>首页 </a><a href='?p={$pre}' class='special2'>上一页 </a>" 
			. $show . "<a href='?p={$max}' class='special' >尾页 </a>";

		}else{
			$show = "{$this->count}条记录  {$this->p}/{$max}页<a href='?p=1' class='special'>首页 </a><a href='?p={$pre}' class='special2'>上一页 </a>" 
			. $show . "<a href='?p={$aft}' class='special2' >下一页 </a><a href='?p={$max}' class='special' >尾页 </a>";
			
		}

		return $show;
	}
}
