<?php
namespace BlueFission\Framework\Skill\Intent;

// Context.php
class Context
{
    protected $data;

    public function __construct()
    {
        $this->data = [];
    }

    public function set($key, $value): self
    {
        $this->data[$key] = $value;
        return $this;
    }

    public function get($key, $default = null)
    {
        return $this->data[$key] ?? $default;
    }

    public function all(): array
    {
        return $this->data;
    }
}
