<?php
use Giftr\System\Controller;
use Giftr\System\Database;

class TestController extends Controller
{
	protected function initialize_complete()
	{
		
	}

	public function	search()
	{
		
		$keyword = "mvc framework";
		
		$model = new stdClass();
		$pas = new AmazonPAS();
		$result = $pas->item_search($keyword,array ( 'ResponseGroup' => 'ItemAttributes,Images'));
		$model->total_results = $result->body->Items->TotalResults;
		
		if (count($model->total_results) > 0)
		{
			foreach ($result->body->Items->Item as $item)
			{
				$model->resultHtml .= '<img src="' . $item->MediumImage->URL . '"><br>' . $item->ItemAttributes->Title . '<br><br>';
			}	
		}
		
		$this->view('test',$model);
	}

}
?>