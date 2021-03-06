<?php // Copyright (c) 2016 Andrey <qRoC.Work@gmail.com> Savitsky. All rights reserved.

namespace Loobee\Ddd\Application\Notification;

use Loobee\Ddd\Domain\EntityRepositoryInterface;

interface PublishedMessageRepositoryInterface extends EntityRepositoryInterface
{
    /**
     * @param string $type_name
     *
     * @return int ID
     */
    public function getMostRecentPublishedMessageId($type_name);

    /**
     * @param string $type_name
     * @param Notification $notification
     */
    public function trackMostRecentPublishedMessage($type_name, Notification $notification);
}