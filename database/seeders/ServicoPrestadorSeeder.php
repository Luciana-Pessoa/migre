use Illuminate\Database\Seeder;
use App\Models\ServicoPrestador;

class ServicoPrestadorSeeder extends Seeder
{
public function run()
{
ServicoPrestador::factory()->count(75)->create();
}
}