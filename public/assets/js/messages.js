const messages = {

    addMessageToElement: function(messageContent, parentElement) {
        messages.removeOldMessages(parentElement);
        const newError = document.createElement('p');
        newError.classList.add('message');
        newError.textContent = messageContent;
        parentElement.prepend(newError);
    },
}