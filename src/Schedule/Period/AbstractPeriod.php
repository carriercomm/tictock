<?php
namespace tictock\Schedule\Period;

/**
 * Abstract Period
 */
abstract class AbstractPeriod implements PeriodInterface
{
    protected $val;
    protected $type;

    /**
     * {@inheritdoc}
     */
    public function __construct($val, $type = "value")
    {
        if (($type === "value" && $this->isValid($val))
            || ($type === "interval" && $this->isValidInterval($val))) {
            $this->val = $val;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get()
    {
        return $this->val;
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Verifies the the given value is valid
     *
     * @param int $val The value to test
     * @return boolean True if the value is valid, false otherwise
     */
    abstract protected function isValid($val);

    /**
     * Verifies the the given interval is valid
     *
     * @param int $interval The interval to test
     * @return boolean True if the interval is valid, false otherwise
     */
    abstract protected function isValidInterval($interval);
}
