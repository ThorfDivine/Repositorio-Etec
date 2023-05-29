//importando as classes necessarias
import java.awt.*; 
import java.awt.event.*; 
import javax.swing.*; 
import javax.swing.event.*; 


public class calcLog extends CalcLook implements ActionListener 
{ 
//declarando a classe
 calcLog() 
 { 
 super(); 
 B1.addActionListener(this); 
 B2.addActionListener(this);
 r1.addActionListener(this); 
 r2.addActionListener(this);
 r3.addActionListener(this); 
 r4.addActionListener(this);
} 

 
 // aqui está o metodo de ActionListener que administra as ações dos Botões 
public void actionPerformed(ActionEvent e) 
 {  
    //botao limpar, faz com que as variaveis digitaveis fiquei nulas
if(e.getSource( )==B1){ 
    T1.setText(" ");  
    T3.setText(" "); 
    T5.setText(" "); 
    }
    //botão sair, responsavel por... sair
if(e.getSource( )==B2) 
    { 
    System.exit(0); 
    } 
//-------------------------------------------
 //pega o valor da primeira var digitavel
 String num1 = T1.getText(); 
 num1 = num1.replace(',','.'); //caso tenha, se torna em .
 //pega o valor da segunda var digitavel
 String num2 = T3.getText();
 num2 = num2.replace(',','.'); //caso tenha, se torna em .

 //torna a primeira var digitavel em uma double
 double n1 = Double.parseDouble(num1);
 //torna a segunda var digitavel em uma double
 double n2 = Double.parseDouble(num2);
 //var responsavel em pegar o resultado
 double resul = n1;  
//analizando qual a operação selecionada
if (e.getSource()==r1) {
    resul = n1+n2;
}
if (e.getSource()==r2) {
    resul = n1-n2;
}
if (e.getSource()==r3) {
    resul = n1*n2;
}
if (e.getSource()==r4) {
    resul = n1/n2;
}
//transforma o resultado em um int para que possa ser mostrada na tela
String R = String.valueOf(resul);
//colocando a resposta na linha digitavel 3
 T5.setText(R); 

 //-------------------------------------------
} 
//"main" do codigo
public static void main (String [] arg) 
 { 
 JFrame janela = new calcLog(); 
 janela.setVisible(true); 
 janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
 WindowListener x = new WindowAdapter() 
 {
 public void windowClosing(WindowEvent e) 
 {
 
 System.exit(0); 
 }
 };
 janela.addWindowListener(x); 
 } 
}