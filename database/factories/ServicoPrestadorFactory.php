// database/factories/ServicoFactory.php

use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicoFactory extends Factory
{
protected $model = Servico::class;

public function definition()
{
return [
'nome' => $this->faker->word,
'situacao' => $this->faker->boolean,
];
}
}