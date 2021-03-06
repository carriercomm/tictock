<?php
namespace Tictock\Scheduler;

use Tictock\Schedule\ScheduleInterface;

/**
 * Scheduler Interface
 */
interface SchedulerInterface
{
    /**
     * Save the command at the given schedule
     *
     * @param ScheduleInterface $schedule
     * @param string $cmd The command
     * @return int The return value from scheduling the command
     */
    public function save(ScheduleInterface $schedule, $cmd);

    /**
     * Returns output from scheduleing the command
     *
     * @return array
     */
    public function output();
}
