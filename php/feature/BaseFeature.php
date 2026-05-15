<?php
declare(strict_types=1);

// Kanyerest SDK base feature

class KanyerestBaseFeature
{
    public string $version;
    public string $name;
    public bool $active;

    public function __construct()
    {
        $this->version = '0.0.1';
        $this->name = 'base';
        $this->active = true;
    }

    public function get_version(): string { return $this->version; }
    public function get_name(): string { return $this->name; }
    public function get_active(): bool { return $this->active; }

    public function init(KanyerestContext $ctx, array $options): void {}
    public function PostConstruct(KanyerestContext $ctx): void {}
    public function PostConstructEntity(KanyerestContext $ctx): void {}
    public function SetData(KanyerestContext $ctx): void {}
    public function GetData(KanyerestContext $ctx): void {}
    public function GetMatch(KanyerestContext $ctx): void {}
    public function SetMatch(KanyerestContext $ctx): void {}
    public function PrePoint(KanyerestContext $ctx): void {}
    public function PreSpec(KanyerestContext $ctx): void {}
    public function PreRequest(KanyerestContext $ctx): void {}
    public function PreResponse(KanyerestContext $ctx): void {}
    public function PreResult(KanyerestContext $ctx): void {}
    public function PreDone(KanyerestContext $ctx): void {}
    public function PreUnexpected(KanyerestContext $ctx): void {}
}
