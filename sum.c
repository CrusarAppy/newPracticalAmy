#include <stdio.h>

void add(int a, int b){
	int sum;
	sum = a + b;
	
	printf("the sum of two numbers %d and %d is %d " , a, b, sum);	
}

int main(){

	int num1 , num2 , sum;
	
	printf("enter first number\n");
	scanf("%d",&num1);
	
	printf("enter second number\n");
	scanf("%d", &num2);
	
	add(num1,num2);

	return 1;
	
	}