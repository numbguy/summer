/*|**************************|
  |**copyright@ MayankDubey**|
  |***created  1-june-2016***|
  |**************************|*/
#include<stdio.h>
#include<stdlib.h>
struct node
{
	int data;
	struct node *link;
};
struct node *head = NULL;
struct node *temp;
struct node *q;
struct node *p;
int i;
void main()
{	
	int n,d,s,c;
	char ch;
	printf("enter the number of nodes you want to create :-");
	scanf("%d" , &n);
	printf("enter the data:-\n");
	for(i=0;i<n;i++)
	{
		scanf("%d" , &d);
		createnode(d);
	}
	display();
	do
	{
	printf("Do you want to do something else:)\n");
	printf("1.add a node at begin\n");
	printf("2.add a node at specific position\n");
	printf("3.add a node at last\n");
	printf("4.delete a node at begin\n");
	printf("5.delete a node at specific position\n");
	printf("6.delete a node at last\n");
	printf("7.Exit\n");
	printf("choose an option :-");
	scanf("%d",&c);
	printf("\n");
	switch(c)
	{
		case 1:
			printf("enter the data to add :- ");
			scanf("%d",&d);
			add_begin(d);
			display();
			break;
		case 2:
			printf("enter the position to add :- ");
			scanf("%d" , &s);
			printf("enter the data to add :- ");
			scanf("%d",&d);
			add_spec(s,d);
			display();
			break;	
		case 3:
			printf("enter the data to add :- ");
			scanf("%d",&d);
			createnode(d);
			display();
			break;
		case 4:	
			delete_begin();
			display();
			break;
		case 5:
			printf("enter the specific position to delete :- ");
			scanf("%d" , &s);
			delete_spec(s);
			display();
			break;
		case 6:
			delete_last();
			display();
			break;
		case 7:
			break;
		default:
			printf("wrong choice please try again");
			break;
		}
		printf("\nDo you want to continue\nif yes press Y else N ::--");
		scanf("%s",&ch);
		}while(ch == 'Y');
			
}
int createnode(int da)
{
	temp = (struct node *)malloc(sizeof(struct node));
	temp->data = da;
	if(head == NULL)
	{
		head = temp;
		temp->link = NULL;
	}
	else
	{
		q = head ; 
		while(q->link!=NULL)
		{
			q = q->link;
		}
		q->link = temp;
		temp->link = NULL;
	}		
}
int add_begin(int da)
{
	temp = (struct node *) malloc(sizeof(struct node));
	temp->data = da;
	temp->link = head;
	head = temp;
}
int add_spec(int s , int da)
{
	temp = (struct node *)malloc(sizeof(struct node));
	temp->data = da;
	q = head;
	for(i=1;i<s-1;i++)
	{
		q = q->link;
	}
	temp->link = q->link;
	q->link = temp;
}
int delete_begin()
{
	temp  = head;
	head = temp->link;
	free(temp);
}
int delete_spec(int s)
{
	q = head;
	for(i=1;i<s-1;i++)
	{
		q = q->link;
	}
	temp = q->link;
	q->link = temp->link;
	free(temp);	
}
int delete_last()
{
	q = head;
	
	while(q->link!=NULL)
	{
		p = q;
		q = q->link;
	}
	temp = p->link;
	p->link = NULL;
	free(temp);
}
int display()
{
	p = head;
	while(p!=NULL)
	{
		printf("%d\t",p->data);
		p = p->link;
	}
	printf("\n");
}

				
	
