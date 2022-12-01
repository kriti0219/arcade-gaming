;Factorial of a given number
DATA SEGMENT
a dw 0006h  
factorial dw ?
data ends
code segment
ASSUME CS: CODE, DS: DATA
start:
mov ax,data
mov ds,ax
mov ax,0001h
mov cx,a
repeat:
mul cx
loop repeat
mov factorial,ax
code ends
end start