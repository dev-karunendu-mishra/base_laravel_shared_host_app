<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeCustomMigration extends Command
{
    protected $signature = 'make:custom-migration {name}';
    protected $description = 'Create a new migration file with custom fields';

    public function handle()
    {
        $name = $this->argument('name');
        $migrationFileName = date('Y_m_d_His') . "_create_{$name}_table.php";

        // Path to the migrations directory
        $migrationPath = database_path('migrations/' . $migrationFileName);

        // Define the custom migration content
        $migrationContent = <<<EOD
        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class Create{$name}Table extends Migration
        {
            public function up()
            {
                Schema::create('{$name}', function (Blueprint \$table) {
                    \$table->id(); // Add custom fields here
                    \$table->uuid('uuid')->unique(); // Example of a custom UUID field
                    \$table->timestamps();
                });
            }

            public function down()
            {
                Schema::dropIfExists('{$name}');
            }
        }
        EOD;

        // Create the migration file
        File::put($migrationPath, $migrationContent);

        $this->info("Migration created successfully: {$migrationFileName}");
    }
}
