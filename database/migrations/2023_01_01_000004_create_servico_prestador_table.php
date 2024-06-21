use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoPrestadorTable extends Migration
{
public function up()
{
Schema::create('servico_prestador', function (Blueprint $table) {
$table->id();
$table->foreignId('prestador_id')->constrained();
$table->foreignId('servico_id')->constrained();
$table->double('km_saida', 8, 2);
$table->double('valor_saida', 8, 2);
$table->double('valor_km_excedente', 8, 2);
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('servico_prestador');
}
}