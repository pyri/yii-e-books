<?php
/**
 * File WebUser
 *
 * @class WebUser
 */
class WebUser extends CWebUser
{
    /**
     * @var User $_model
     */
    private $_model;
    /**
     * @return User
     */
    public function getModel()
    {
        if($this->_model !== null) {
            return $this->_model;
        }

        $this->_model = User::model()->findByPk($this->id);

        return $this->_model;
    }
}