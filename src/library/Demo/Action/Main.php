<?PHP
class Demo_Action_Main extends Demo_Action_Abstract
{
	public function run()
	{
        $this->callAction('Demo_Action_Test_Main');
	}
}
