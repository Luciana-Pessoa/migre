// database/factories/PrestadorFactory.php

use App\Models\Prestador;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestadorFactory extends Factory
{
protected $model = Prestador::class;

public function definition()
{
return [
'nome' => $this->faker->name,
'logradouro' => $this->faker->streetName,
'bairro' => $this->faker->streetSuffix,
'numero' => $this->faker->buildingNumber,
'latitude' => $this->faker->latitude,
'longitude' => $this->faker->longitude,
'cidade' => $this->faker->city,
'UF' => $this->faker->stateAbbr,
'situacao' => $this->faker->boolean,
];
}
}