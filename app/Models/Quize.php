<?php

namespace LaraCore\App\Models;

use LaraCore\Framework\Db\DataModel;

class Quize extends DataModel
{
  protected $table = 'users';
  protected $fillable = [];

  public function tableName(): string
  {
    return $this->table;
  }

  public function attributes(): array
  {
    return $this->fillable;
  }

  public function save()
  {
    // TODO: Implement save() method.
    // $this->password = Hash::make($this->password);
    // $this->status = 1;
    return parent::save();
  }
}
