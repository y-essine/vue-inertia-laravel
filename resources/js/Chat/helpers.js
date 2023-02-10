export const groupMessages = (messages) => {
    return messages.reduce((acc, message) => {
        const lastMessage = acc[acc.length - 1];
        if (lastMessage && lastMessage.user.id === message.user.id) {
            lastMessage.messages.push(message);
        } else {
            acc.push({
                user: message.user,
                date: message.date,
                messages: [message],
            });
        }
        return acc;
    }, []);
}