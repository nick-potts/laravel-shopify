<?php

namespace CashDash\Zaar\Dtos;

use CashDash\Zaar\Concerns\Actions\AsFake;
use CashDash\Zaar\Concerns\Actions\AsObject;
use CashDash\Zaar\Models\ShopifySession;

class OnlineSessionData extends SessionData
{
    use AsFake;
    use AsObject;

    public static function fromModel(ShopifySession $model): OnlineSessionData
    {
        return new self(
            id: $model->id,
            shop: $model->shop,
            state: $model->state,
            is_online: $model->is_online,
            scope: $model->scope,
            expires_at: $model->expires_at,
            access_token: $model->access_token,
            user_id: $model->user_id,
            first_name: $model->first_name,
            last_name: $model->last_name,
            email: $model->email,
            email_verified: $model->email_verified,
            account_owner: $model->account_owner,
            locale: $model->locale,
            collaborator: $model->collaborator,
            user_scopes: $model->user_scopes
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'shop' => $this->shop,
            'state' => $this->state,
            'is_online' => $this->is_online,
            'scope' => $this->scope,
            'expires_at' => $this->expires_at,
            'access_token' => $this->access_token,
            'user_id' => $this->user_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'email_verified' => $this->email_verified,
            'account_owner' => $this->account_owner,
            'locale' => $this->locale,
            'collaborator' => $this->collaborator,
            'user_scopes' => $this->user_scopes,
        ];
    }
}
