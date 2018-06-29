<?
namespace Standard;

trait GetUserInput{

    public function getUserInput(string $prompt=""){
        $input = readline($prompt);
        return $input;
    }
}
