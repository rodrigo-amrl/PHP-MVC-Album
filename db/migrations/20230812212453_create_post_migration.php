<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePostMigration extends AbstractMigration
{
    public function change(): void
    {
        $table = $this->table('posts');
        $table->addColumn('title', 'string')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->create();
    }
}
