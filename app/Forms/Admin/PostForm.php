<?php

namespace App\Forms\Admin;

use App\Enums\PostStatus;
use Kris\LaravelFormBuilder\Field;
use Kris\LaravelFormBuilder\Form;

class PostForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', Field::TEXT, [
                'label' => 'Title',
                'rules' => 'required',
            ])
            ->add('content', Field::TEXTAREA, [
                'label' => 'Content',
                'attr'  => [
                    'id' => 'editor',
                ]
            ])
            ->add('status', Field::CHOICE, [
                'label'         => 'Status',
                'choices'       => PostStatus::getKeys(),
                'default_value' => PostStatus::Draft,
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Save',
                'attr'  => [
                    'class' => 'btn btn-success',
                ],
            ]);
    }
}
