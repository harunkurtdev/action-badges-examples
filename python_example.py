# logic to work out our values
label = 'example'
message = 'python'
message_color = 'blue'

print(f'echo "LABEL={label}" >> $GITHUB_ENV')
print(f'echo "MESSAGE={message}" >> $GITHUB_ENV')
print(f'echo "MESSAGE-COLOR={message_color}" >> $GITHUB_ENV')
