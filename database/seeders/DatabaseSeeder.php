use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
public function run()
{
$this->call([
PrestadorSeeder::class,
ServicoSeeder::class,
ServicoPrestadorSeeder::class,
]);
}
}