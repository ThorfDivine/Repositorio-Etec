//importando as classes necessarias
import java.awt.*; 
import java.awt.event.*; 
import javax.swing.*;
import javax.swing.text.Position; 

 
public class CalcLook extends JFrame  
{ 
// aqui estão as variáveis publicas da classe 
JTextField T1, T2,T3,T4,T5; 
JLabel L0, L1, L2, L3, L4, L5, L6; 
JButton B1, B2; 
JRadioButton r1, r2, r3, r4 ; 
ButtonGroup radio ;
 
 CalcLook( ) 
 { 
 setTitle("Calculadora!!"); 
 setSize(350,400); 
 setLocation(220,150); 
 setResizable(true); 
 getContentPane().setBackground(new Color(217,203,150)); 
 

 // Formata o Título do Frame 
 L0 = new JLabel("calculadora"); 
 L0.setSize(250,20); 
 L0.setLocation(90,10); 
 
 // Rotulo e Campo de Texto da 1º linha 
 L1 = new JLabel("1° numero da operação:"); 
 L1.setSize(200,20); 
 L1.setLocation(20,60); 
 
 //aonde a pessoa vai digitar o primeiro número da operação
 T1 = new JTextField(); 
 T1.setSize(50,20); 
 T1.setLocation(170,60);  
 
 //radio: +
 r1 = new JRadioButton("+", true); 
 r1.setSize(35,20); 
 r1.setLocation(100,120); 
 r1.setBackground(new Color(217,203,150)); 
 //radio: -
 r2 = new JRadioButton("-"); 
 r2.setSize(35,20); 
 r2.setLocation(140,120); 
 r2.setBackground(new Color(217,203,150)); 
 //radio: *
 r3 = new JRadioButton("*", true); 
 r3.setSize(35,20); 
 r3.setLocation(180,120); 
 r3.setBackground(new Color(217,203,150)); 
 //radio: /
 r4 = new JRadioButton("/"); 
 r4.setSize(35,20); 
 r4.setLocation(220,120); 
 r4.setBackground(new Color(217,203,150));
 
 
 //responsavel por agrupar todos os radios para q n de para escolher todos
 radio = new ButtonGroup(); 
 radio.add(r1); 
 radio.add(r2);
 radio.add(r3); 
 radio.add(r4);
 
 // Rotulo e Campo de Texto da 2º linha 
 
 L3 = new JLabel("2° numero da operação :"); 
 L3.setSize(150,20); 
 L3.setLocation(20,90); 
 
 //aonde a pessoa vai digitar o segundo número da operação
 T3 = new JTextField(); 
 T3.setSize(50,20); 
 T3.setLocation(170,90);  
 
 // Rotulo e Campo de Texto da 4º linha 
 L5 = new JLabel("Resultado :"); 
 L5.setSize(250,20); 
 L5.setLocation(80,180); 
 L5.setForeground(new Color(0,100,0)); 
 
 //mostra qual o resultado(adiciona e modifica)
 T5 = new JTextField(); 
 T5.setSize(80,20); 
 T5.setLocation(170,180); 
 T5.setForeground(Color.red); // dá destaque ao resultado dando a cor vermelha 
 
 //botão limpar(adicionando e modificando)
 B1 = new JButton("Limpar"); 
 B1.setSize(100,20); 
 B1.setBackground(new Color(237,223,170)); 
 B1.setLocation(70,230); 

 //botão sair(adicionando e modificando)
 B2 = new JButton("Sair"); 
 B2.setSize(100,20); 
 B2.setBackground(new Color(237,223,170)); 
 B2.setLocation(180,230); 
 

 //deixando os elementos visiveis


 getContentPane( ).setLayout(null); 
 getContentPane( ).add(L0); // adiciona o titulo ao Container 
 getContentPane( ).add(L1);  // adiciona a 1ª linha 
 getContentPane( ).add(T1);
 getContentPane( ).add(L3); // adiciona a 2ª linha 
 getContentPane( ).add(T3); 
 getContentPane( ).add(r1); // radio responsavel pela operação: +
 getContentPane( ).add(r2); // radio responsavel pela operação: -
 getContentPane( ).add(r3); // radio responsavel pela operação: *
 getContentPane( ).add(r4); // radio responsavel pela operação: /  
 getContentPane( ).add(L5); // adiciona a 4ª linha 
 getContentPane( ).add(T5); 
 getContentPane( ).add(B1); // adiciona os botões B1 e B2 ao Frame
 getContentPane( ).add(B2); 

 } 
} 