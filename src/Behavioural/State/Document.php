<?php

namespace roterpanda\Designpatterns\Behavioural\State;

class Document
{
    private State $state;
    private UserRoles $currentUserRole;


    public function __construct(UserRoles $currentUserRole)
    {
        $this->state = new DraftState($this);
        $this->currentUserRole = $currentUserRole;
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function publish(): void
    {
        $this->state->publish();
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function setCurrentUserRole(UserRoles $currentUserRole): void
    {
        $this->currentUserRole = $currentUserRole;
    }

    public function getCurrentUserRole(): UserRoles
    {
        return $this->currentUserRole;
    }
}