<div class="{{ $class ?? '' }}">
    <div class="col-md-4 mb-3">
        <div class="question__field">
            <label class="mb-2" for="language">
                التدريس باللغة <span class="red">*</span>
            </label>
            <select wire:model="languageId" name="language_id" id="language" class="form-control">
                @foreach($languages as $language)
                    <option value="{{ $language->id }}">{{ $language->local_name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="question__field">
            <label class="mb-2" for="unit">
                المادة الدراسية<span class="red">*</span>
            </label>
            <select wire:model="subjectId" name="subject_id" id="subject_id" class="form-control">
                <option value="">اختر المادة الدراسية</option>
                @foreach($subjects as $subject)
                @if($subject->name_ar)
                    {{ $subjectName = $subject->name_ar}}
                @elseif($subject->name_en)
                    {{ $subjectName = $subject->name_en}}
                @else
                    {{ $subjectName = $subject->name_fr}}
                @endif
                    <option value="{{ $subject->id }}">{{ $subject->year->name.' - '.$subjectName }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="question__field exam-units">
            <label class="mb-2" for="unit">
                اختر الوحدة
                <span class="red">*</span>
            </label>
            <select wire:model="unitId" name="unit_id" id="unit" style="height: 38px;" class="form-control  p-0">
                <option value="">اختر الوحدة</option>
                @foreach($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->getAttribute('name_'.$languageCode, 'name_en') ?? $unit->name_en ?? $unit->name_ar ?? $unit->name_fr }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4 mb-3 lesson-units">
        <div class="question__field">
            <label class="mb-2" for="lesson">
                اختر الدرس
                <span class="red">*</span>
            </label>
            <select wire:model="lessonId" name="lesson_id" id="lesson" style="height: 38px;" class="form-control  p-0">
                <option value="">اختر الدرس</option>
                @foreach($lessons as $lesson)
                    <option value="{{ $lesson->id }}">{{ $lesson->getAttribute('name_'.$languageCode, 'name_en') ?? $lesson->name_en ?? $lesson->name_ar ?? $lesson->name_fr }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4 mb-3 exam-title">
        <div class="question__field">
            <label class="mb-2" for="title">
                عنوان الأمتحان
            </label>
            <input type="text" name="title" class="form-control" id="title" placeholder="أكتب عنوان الأمتحان"/>
            @error('title')
                <p class="help text-danger">{{ $errors->first('title') }}</p>
            @enderror
        </div>
    </div>
</div>
