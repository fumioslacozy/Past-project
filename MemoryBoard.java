import java.util.*;

public class MemBoard{
	public static Scanner scan = new Scanner(System.in);
	public static void main(String [] args){
		String ans;
		do{
			clear();
			int length = InLength();
			int width = InWidth(length);
			game(length,width);
			do{
				System.out.print("Do you want to replay the game [Y/N] ? ");
				ans = scan.nextLine();
			}while((ans.equalsIgnoreCase("Y") || ans.equalsIgnoreCase("N")) == false);
		}while(ans.equalsIgnoreCase("Y") == true);
		clear();
		System.out.println("\t\t\t  ^_^ THANK YOU FOR PLAYING ^_^\n\n\n\n\n\n\n\n\n\n");
	}
	public static void game(int length, int width){
		//clear();
		Random rand = new Random();
		int i,j,k;
		int n=0;
		char [] rdlist = {1,2,3,4,5,6,11,12,14,15,16,17,18,19,20,21,35,36,37,38}; // LIST SYMBOL (CEK ASCII)
		char [][] board = new char[20][20]; // BOARD
		char [] symbol = new char[40]; // CHAR PENYIMPAN SYMBOL
		int []flag = new int[40]; // FLAG JUMLAH SYMBOL
		boolean check; // FLAG APAKAH SYMBOL SUDAH PENUH ATAU BELUM
		boolean same; // FLAG UNTUK APAKAH SYMBOL SUDAH ADA ATAU BELUM

		// SET JUMLAH AWAL TIAP SYMBOL NOL
		for(i=0;i<((width*length)/2);i++){
			flag[i] = -1;
		}
		// SET TABLE
		for(i=0;i<width;i++){
			for(j=0;j<length;j++){
				do{
					check = true;
					same = false;
					board[i][j] = rdlist[rand.nextInt((length*width)/2)];
					for(k=0;k<n;k++){
						if(board[i][j] == symbol[k]){
							if(flag[k] < 2){
								same = true;
								flag[k]++;
							}else{
								check = false;
							}
							break;
						}
					}
					if(same == true){
						break;
					}
				}while(check == false);
				if(same == false){
					symbol[n] = board[i][j];
					flag[n]++;
					n++;
				}
			}
		}

		boolean [][]opened = new boolean[20][20];
		boolean win;
		int chance = 10;
		int score=0;
		int grade=0;
		int [] inw = new int[2];
		int [] inl = new int[2];


		do{
			win = true;
			clear();
			System.out.println("Score : " + score + "\tGrade : " + grade + "\tChance : " + chance + "\n");
			System.out.print("     ");
			for(i=0;i<length;i++){
				System.out.print(" " + (i+1) + " ");
			}
			System.out.println();
			for(i=0;i<width;i++){
				System.out.print("   " + (i+1) + " ");
				for(j=0;j<length;j++){
					if(opened[i][j] == true){
						System.out.print(" " + board[i][j] + " ");
					}else{
						System.out.print(" X ");
					}
					if(j>8){
						System.out.print(" ");
					}
				}
				System.out.println();
			}
			inw[0] = inw[1] = inl[0] = inl[1] = -1;
			for(i=0;i<2;i++){
				System.out.println("\nCARD " + (i+1));
				System.out.println("=======");
				do{
					do{
						System.out.print("Input X [1-" + length +  "] : ");
						try{
							inl[i] = scan.nextInt();
							if(inl[i] < 1 || inl[i] > length){
								System.out.println("X must between 1 and " + length);
							}
						}catch(InputMismatchException ime){
							inl[i] = -1;
							System.out.println("X must be numeric");
						}
						scan.nextLine();
					}while(inl[i] < 1 || inl[i] > length);
					do{
						System.out.print("Input Y [1-" + width +  "] : ");
						try{
							inw[i] = scan.nextInt();
							if(inw[i] < 1 || inw[i] > width){
								System.out.println("Y must between 1 and " + width);
							}
						}catch(InputMismatchException ime){
							inw[i] = -1;
							System.out.println("Y must be numeric");
							}
						scan.nextLine();
					}while(inw[i] < 1 || inw[i] > width);
					if(opened[inw[i]-1][inl[i]-1] == true){
						System.out.println("Card has been opened !!!");
					}else if(inw[1] == inw[0] && inl[1] == inl[0]){
						System.out.println("Cannot open the same card");
					}
				}while(opened[inw[i]-1][inl[i]-1] == true || (inw[1] == inw[0] && inl[1] == inl[0]));
				clear();
				System.out.println("Score : " + score + "\tGrade : " + grade + "\tChance : " + chance + "\n");
				System.out.print("     ");
				for(j=0;j<length;j++){
					System.out.print(" " + (j+1) + " ");
				}
				System.out.println();
				for(j=0;j<width;j++){
					System.out.print("   " + (j+1) + " ");
					for(k=0;k<length;k++){
						if(opened[j][k] == true || ((inw[0]-1) == j && (inl[0]-1) == k) || ((inw[1]-1) == j && (inl[1]-1) == k)){
							System.out.print(" " + board[j][k] + " ");
						}else{
							System.out.print(" X ");
						}
					}
					System.out.println();
				}
			}
			if(board[inw[0]-1][inl[0]-1] == board[inw[1]-1][inl[1]-1]){
				System.out.println("SAME!!!");
				opened[inw[0]-1][inl[0]-1] = opened[inw[1]-1][inl[1]-1] = true;
				grade += 20;
			}else{
				chance--;
				System.out.println("NOT SAME!!!");
				if(chance > 0){
					System.out.println(chance + " chance(s) left");
				}else{
					System.out.println("No more chance");
				}
			}
			for(i=0;i<width;i++){
				for(j=0;j<length;j++){
					if(opened[i][j] == false){
						win = false;
						break;
					}
				}
			}
			score = chance * grade;
			scan.nextLine();
		}while(win == false && chance > 0);
		clear();
		if(win == true){
			System.out.println("\t\t\t\t!!! YOU WIN !!!\n\n\n\n\n\n\n\n\n\n");
		}else{
			System.out.println("\t\t\t\t!!! YOU LOSE !!!\n\n\n\n\n\n\n\n\n\n");
		}
	}
	public static int InLength(){
		// INPUT LENGTH
		int length=0;
		do{
			System.out.print("Input box length [2-20][must be even] : ");
			try{
				length = scan.nextInt();
				if(length < 2 || length > 20){
					System.out.println("Length must between 2 and 20");
				}else if(length%2 != 0){
					System.out.println("Length must be even number");
				}
			}catch(InputMismatchException ime){
				length = 0;
				System.out.println("Length must be numeric");
			}
			scan.nextLine();
		}while(length < 2 || length > 20 || length%2 != 0);
		return length;
	}
	public static int InWidth(int length){
		// INPUT Width
		int width=0;
		int limw=(40/length);
		if(limw%2!=0){
			limw--;
		}
		do{
			System.out.print("Input box width  [2-" + limw + "][must be even] : ");
			try{
				width = scan.nextInt();
				if(width < 2 || width > 20){
					System.out.println("Width must between 2 and 20");
				}else if(length%2 != 0){
					System.out.println("Width must be even number");
				}
			}catch(InputMismatchException ime){
				width = 0;
				System.out.println("Width must be numeric");
			}
			scan.nextLine();
		}while(width < 2 || width > limw || width%2 != 0);
		return width;
	}
	public static void clear(){
		int i;
		for(i=0;i<25;i++){
			System.out.println();
		}
	}
}
