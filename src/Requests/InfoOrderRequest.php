<?php

namespace VKolegov\DolyameAPI\Requests;

class InfoOrderRequest
{
    protected string $id;
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'orderId' => $this->id,
        ];
    }
}
