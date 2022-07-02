<x-form.input name="title" value="{{ isset($page) ? $page->title : null }}">{{ __('admin.title') }}</x-form.input>

<x-form.textarea :ckEditor="true" name="body" :ckEditor="true" value="{{ isset($page) ? $page->body : null }}">{{ __('admin.body') }}</x-form.textarea>

<x-form.file name="image" image="{{ $page->image_url }}">{{ __('admin.image') }}</x-form.file>

<x-form.submit redirectRoute="{{ route('admin.pages.index') }}">{{ isset($page) ? __('admin.edit') : __('admin.add') }}</x-form.submit>
