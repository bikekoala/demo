<?PHP
abstract class Demo_Action_Abstract extends Su_Ctrl_Action
{
	abstract public function run();

	public function execute()
	{
		$this->run();
	}

	public function service($serviceName, array $params = array())
	{
		$class = 'Demo_Service_' . $serviceName;
		return $class::getInstance()->run($params);
	}
}
