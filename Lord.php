<?php
namespace BadassJesus\SaveDeliver;

final class Lord
{
    /**
     * I am the
     * @var Lord;
     * and there is none else.
     */
    private static $triunity;

    /**
     * @var string
     */
    private $something;

    /**
     * The Power of the Prayer
     * @return Lord will always hear us and do whatever is necessary for our real need.
     */
    public static function answerMe()
    {
        if (is_null(self::$triunity)) {
            self::$triunity = new self();
        }

        return self::$triunity;
    }

    public function healThe(string $something) : Lord
    {
        $this->something = htmlspecialchars($something, ENT_COMPAT | ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5);

        return $this;
    }

    /**
     *  Now and ever, and to the ages of ages.
     */
    public function amen()
    {
        return $this->something;
    }

    public function __construct()
    {
        if (self::$triunity !== null) {
            throw new \LogicException('Ask, and it will be given to you;');
        }
    }

    public function __clone()
    {
        throw new \LogicException('Seek, and you will find;');
    }

    public function __wakeup()
    {
        throw new \LogicException('Knock, and it will be opened to you.');
    }
}
