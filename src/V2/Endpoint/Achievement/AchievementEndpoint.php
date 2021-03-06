<?php

namespace GW2Treasures\GW2Api\V2\Endpoint\Achievement;

use GW2Treasures\GW2Api\V2\Bulk\BulkEndpoint;
use GW2Treasures\GW2Api\V2\Bulk\IBulkEndpoint;
use GW2Treasures\GW2Api\V2\Endpoint;
use GW2Treasures\GW2Api\V2\Localization\ILocalizedEndpoint;
use GW2Treasures\GW2Api\V2\Localization\LocalizedEndpoint;

class AchievementEndpoint extends Endpoint implements IBulkEndpoint, ILocalizedEndpoint {
    use BulkEndpoint, LocalizedEndpoint;
    
    /** @var bool $supportsIdsAll */
    protected $supportsIdsAll = false;

    /**
     * The url of this endpoint.
     *
     * @return string
     */
    public function url() {
        return 'v2/achievements';
    }

    /**
     * Get achievement categories.
     *
     * @return CategoryEndpoint
     */
    public function categories() {
        return new CategoryEndpoint($this->api);
    }

    /**
     * Get daily achievements.
     *
     * @return DailyEndpoint
     */
    public function daily() {
        return new DailyEndpoint($this->api);
    }

    /**
     * Get achievement groups.
     *
     * @return GroupEndpoint
     */
    public function groups() {
        return new GroupEndpoint($this->api);
    }
}
