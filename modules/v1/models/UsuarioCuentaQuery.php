<?php

namespace app\modules\v1\models;

/**
 * This is the ActiveQuery class for [[UsuarioCuenta]].
 *
 * @see UsuarioCuenta
 */
class UsuarioCuentaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return UsuarioCuenta[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return UsuarioCuenta|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
