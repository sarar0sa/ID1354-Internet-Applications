<?php

namespace Chat\Model;

/**
 * Holds one entry in the conversation.
 */
class NewEntry implements \JsonSerializable {

    private $username;
    private $comment;
    private $canDelete;

    
    public function __construct($username, $comment) {
        $this->username = $username;
        $this->comment = $comment;
        $this->canDelete = false;
    }

    /**
     * @return string The author's nick name.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @return string The message.
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @return boolean True if the entry has been deleted.
     */
    public function canDelete() {
        return $this->canDelete;
    }

    /**
     * @param boolean $deleted Set to true if the entry shall be deleted.
     */
    public function setDeleted($deleted) {
        $this->canDelete = $deleted;
    }

    /**
     * Create a JSON representation of this object.
     * 
     * @return \StdClass An object of an anonymous class that contains the 'nickName', 'msg' 
     *                    and 'timestamp' properties of this object and can be encoded 
     *                    with \json_encode. 
     */
    public function jsonSerialize() {
        $json_obj = new \stdClass;
        $json_obj->username = \json_encode($this->username);
        $json_obj->comment = \json_encode($this->comment, JSON_UNESCAPED_UNICODE);
        $json_obj->canDelete = \json_encode($this->canDelete);
        return $json_obj;
    }

}