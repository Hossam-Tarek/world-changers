<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'lang' => $this->lang->name,
            'subject' => $this->subjects[0]->name,
            'mobile' => $this->phones[0]->number,
            'grade' => $this->years[0]->name,
            'area' => $this->city->state->name,
            'center' => $this->school,
            'place' => $this->city->name,
            'image' => isset($this->image) ? asset('$this->image') : asset('assets/images/teachers.jpg'),
        ];
    }
}
