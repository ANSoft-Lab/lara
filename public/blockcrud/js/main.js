var codeBlocks = document.querySelectorAll('.blockcrud_code_editor');

for (let i = 0; i < codeBlocks.length; i++) {
    var codeBlock = codeBlocks[i];
    
    codeBlock.querySelector('.blockcrud_code_source textarea').addEventListener('keyup', refreshPreview);
}

function refreshPreview(e) {
    var codeBlock = e.target.closest('.blockcrud_code_editor');

    var previewCode = codeBlock.querySelector('.blockcrud_code_source textarea').value,
        shadowBlock = codeBlock.querySelector('.blockcrud_code_preview preview-code').shadowRoot,
        oldWrapper = shadowBlock.querySelector('.shadow_wrapper');

    shadowBlock.removeChild(oldWrapper);

    var template = document.createElement('div');
    template.setAttribute('class', 'shadow_wrapper');
    template.innerHTML = previewCode;

    shadowBlock.appendChild(document.importNode(template, true));
}

var toggleBlocks = document.querySelectorAll('.blockcrud_toggle_wrapper');

for (let j = 0; j < toggleBlocks.length; j++) {
    var toggleBlock = toggleBlocks[j],
        conditions = toggleBlock.querySelectorAll('.blockcrud_toggle_when');

    toggleBlock.classList.add('blockcrud_hidden');

    for (let c = 0; c < conditions.length; c++) {
        let input = document.querySelector('[name=' + conditions[c].getAttribute('name').replace('cond_', '') + ']');

        if(input && ! input.getAttribute('data-listen')) {
            input.addEventListener('change', toggleInput);
            input.addEventListener('select', toggleInput);
            input.setAttribute('data-listen', true);

            var evt = new Event('change');
            input.dispatchEvent(evt);
        }
    }
}

function toggleInput(e) {
    var input = e.target.closest('input');

    if(! input) {
        input = e.target.closest('select');
    }

    if(! input) {
        input = e.target.closest('textarea');
    }

    if(input) {
        var wrappers = document.querySelectorAll('.blockcrud_toggle_wrapper');

        for (let w = 0; w < wrappers.length; w++) {
            if(wrappers[w].querySelector('[name=cond_' + input.getAttribute('name') + ']')) {
                wrappers[w].classList.add('blockcrud_hidden');
            }
        }

        var conditions = document.querySelectorAll('[name=cond_' + input.getAttribute('name') + ']');

        for (let i = 0; i < conditions.length; i++) {
            var wrapper = conditions[i].closest('.blockcrud_toggle_wrapper');

            if(input.value == conditions[i].value) {
                wrapper.classList.remove('blockcrud_hidden');
            }
        }
    }
}