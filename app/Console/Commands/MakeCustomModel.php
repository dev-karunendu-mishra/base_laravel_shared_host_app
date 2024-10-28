<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeCustomModel extends Command
{
    protected $signature = 'make:custom-model {name} {--m|migration : Create a custom migration file}';
    protected $description = 'Create a new model and an optional custom migration file';

    public function handle()
    {
        $name = $this->argument('name');
        $modelName = Str::studly($name); // Format the model name

        // Create the model
        $this->createModel($modelName);

        // Check if the migration flag is set
        if ($this->option('migration')) {
            $this->createCustomMigration($name);
        }

        $this->info("Model created successfully: $modelName");
    }

    protected function createModel($modelName)
    {
        $modelPath = app_path("Models/{$modelName}.php");

        $modelContent = <<<EOD
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class $modelName extends Model
{
    use HasFactory;

    protected \$fillable = [
        'uuid', // Add your custom fields
    ];
}
EOD;

        File::put($modelPath, $modelContent);
    }

    protected function createCustomMigration($tableName)
    {
        $migrationFileName = date('Y_m_d_His') . "_create_{$tableName}_table.php";
        $migrationPath = database_path('migrations/' . $migrationFileName);

        $migrationContent = <<<EOD
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create{$tableName}Table extends Migration
{
    public function up()
    {
        Schema::create('{$tableName}', function (Blueprint \$table) {
            \$table->id();
            \$table->uuid('uuid')->unique();
            \$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('{$tableName}');
    }
}
EOD;

        File::put($migrationPath, $migrationContent);
        $this->info("Custom migration created successfully: $migrationFileName");
    }
}
