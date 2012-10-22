<?PHP
class Demo_Action_Test_Main extends Demo_Action_Abstract
{
    public function run()
    {
        $msg = $this->service('Test_Main');

        $this->response('text', $msg);
        $this->tpl('index');
        $this->format(Su_Const::FT_HTML);
    }
}
