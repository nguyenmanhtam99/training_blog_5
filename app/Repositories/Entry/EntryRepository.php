<?php

namespace App\Repositories\Entry;

use App\Repositories\BaseRepository;
use App\Models\Entry;

class EntryRepository extends BaseRepository implements EntryRepositoryInterface
{
    public function __construct(Entry $entry)
    {
        $this->model = $entry;
    }
}
