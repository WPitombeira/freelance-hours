<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Timer extends Component {
    public Project $project;

    public function render() {
        $Diff = now()->diff($this->project->ends_at);
        return view('livewire.projects.timer', [
            'days' => $Diff->d,
            'hours' => $Diff->h,
            'minutes' => $Diff->i,
            'seconds' => $Diff->s,
        ]);
    }
}
