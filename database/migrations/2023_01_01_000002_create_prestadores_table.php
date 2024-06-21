use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestadoresTable extends Migration
{
public function up()
{
Schema::create('prestadores', function (Blueprint $table) {
$table->id();
$table->string('nome');
$table->string('logradouro');
$table->string('bairro');
$table->integer('numero');
$table->double('latitude', 15, 8);
$table->double('longitude', 15, 8);
$table->string('cidade');
$table->string('UF');
$table->boolean('situacao');
$table->timestamps();
});
}

public function down()
{
Schema::dropIfExists('prestadores');
}
}