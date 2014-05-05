<?php
/**
 * PHPWord
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2014 PHPWord
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Style;

/**
 * TOC style
 */
class TOC extends Tab
{
    const TABLEADER_DOT = self::TAB_LEADER_DOT;
    const TABLEADER_UNDERSCORE = self::TAB_LEADER_UNDERSCORE;
    const TABLEADER_LINE = self::TAB_LEADER_HYPHEN;
    const TABLEADER_NONE = self::TAB_LEADER_NONE;

    /**
     * Indent
     *
     * @var int
     */
    private $indent;


    /**
     * Create a new TOC Style
     */
    public function __construct()
    {
        parent::__construct(self::TAB_STOP_RIGHT, 9062, self::TABLEADER_DOT);
        $this->indent = 200;
    }

    /**
     * Get Tab Position
     *
     * @return int
     */
    public function getTabPos()
    {
        return $this->getPosition();
    }

    /**
     * Set Tab Position
     *
     * @param int $value
     */
    public function setTabPos($value)
    {
        $this->setPosition($value);
    }

    /**
     * Get Tab Leader
     *
     * @return string
     */
    public function getTabLeader()
    {
        return $this->getLeader();
    }

    /**
     * Set Tab Leader
     *
     * @param string $value
     */
    public function setTabLeader($value = self::TABLEADER_DOT)
    {
        $this->setLeader($value);
    }

    /**
     * Get Indent
     *
     * @return int
     */
    public function getIndent()
    {
        return $this->indent;
    }

    /**
     * Set Indent
     *
     * @param string $value
     */
    public function setIndent($value)
    {
        $this->indent = $value;
    }
}