namespace App\Livewire;

use Livewire\Component;

class ConvertCase extends Component
{
    public $inputText = ''; // Text dari pengguna
    public $outputText = ''; // Hasil konversi
    public $caseType = 'sentence'; // Tipe konversi default

    public function convert()
    {
        switch ($this->caseType) {
            case 'sentence':
                $this->outputText = ucfirst(strtolower($this->inputText));
                break;
            case 'lower':
                $this->outputText = strtolower($this->inputText);
                break;
            case 'upper':
                $this->outputText = strtoupper($this->inputText);
                break;
            case 'capitalized':
                $this->outputText = ucwords(strtolower($this->inputText));
                break;
            case 'alternating':
                $this->outputText = $this->alternatingCase($this->inputText);
                break;
            case 'title':
                $this->outputText = ucwords($this->inputText);
                break;
            case 'inverse':
                $this->outputText = $this->inverseCase($this->inputText);
                break;
            case 'camel':
                $this->outputText = lcfirst(str_replace(' ', '', ucwords(strtolower($this->inputText))));
                break;
            default:
                $this->outputText = $this->inputText;
                break;
        }
    }

    private function alternatingCase($text)
    {
        $result = '';
        foreach (str_split($text) as $index => $char) {
            $result .= $index % 2 === 0 ? strtolower($char) : strtoupper($char);
        }
        return $result;
    }

    private function inverseCase($text)
    {
        $result = '';
        foreach (str_split($text) as $char) {
            $result .= ctype_lower($char) ? strtoupper($char) : strtolower($char);
        }
        return $result;
    }

    public function render()
    {
        return view('livewire.case-converter');
    }
}
