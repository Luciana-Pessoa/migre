// database/factories/ServicoPrestadorFactory.php

use App\Models\ServicoPrestador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicoPrestadorFactory extends Factory
{
protected $model = ServicoPrestador::class;

public function definition()
{
return [
'prestador_id' => \App\Models\Prestador::factory(),
'servico_id' => \App\Models\Servico::factory(),
'km_saida' => $this->faker->randomFloat(2, 0, 50),
'valor_saida' => $this->faker->randomFloat(2, 0, 100),
'valor_km_excedente' => $this->faker->randomFloat(2, 0, 10),
];
}
}