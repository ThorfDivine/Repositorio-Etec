//recebendo importações necessarias
import javax.swing.*;
import java.awt.Font;
import java.awt.Color;
import java.awt.event.*;

public class index extends calcLog {

    //declarando variaveis
    JMenuBar barra = new JMenuBar();
    JFrame janela = new calcLog();

    JMenu menu1 = new JMenu("Opções");
    JMenu menu2 = new JMenu("Sair");

    JMenuItem item1 = new JMenuItem("Exit");
    JMenuItem item2 = new JMenuItem("calculadora");   
   
    //iniciando lógica
    public index() {
        //criando o Menu
        setJMenuBar(barra);
        //adicionando elementos do menu
        barra.add(menu1);
        barra.add(menu2);
        //adicionando elementos dos elementos do menu
        menu2.add(item1);
        menu1.add(item2);
        //fazendo com que n apareça os itens da janela calcLook
        janela.setVisible(false);
        L0.setVisible(false);
        L1.setVisible(false);
        T1.setVisible(false);
        L3.setVisible(false);
        T3.setVisible(false);
        r1.setVisible(false);
        r2.setVisible(false);
        r3.setVisible(false);
        r4.setVisible(false);
        L5.setVisible(false);
        T5.setVisible(false);
        B1.setVisible(false);
        B2.setVisible(false);
        //dando funções aos elementos
        item1.addActionListener(new ActionListener(){
            public void actionPerformed(ActionEvent e){
                System.exit(0);//faz com que feche
            }
        });
        item2.addActionListener(new ActionListener(){
            public void actionPerformed(ActionEvent e){
                 //deixando os elementos visiveis
 janela.setVisible(true);
 L0.setLayout(null);
 L0.setVisible(true);
 L1.setVisible(true);
 T1.setVisible(true);
 L3.setVisible(true);
 T3.setVisible(true);
 r1.setVisible(true);
 r2.setVisible(true);
 r3.setVisible(true);
 r4.setVisible(true);
 L5.setVisible(true);
 T5.setVisible(true);
 B1.setVisible(true);
 B2.setVisible(true);
            }
        });
        //fazendo com que ao fechar a janela menor, feche tudo
        janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        //modificando o menu 
        setTitle("menu");
        setSize(800, 600);
        //fazendo com que de fato feche ao clicar no "x"
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLocationRelativeTo(null);
        getContentPane().setBackground(new Color(100, 100,100));
        //fazendo com que a janela fique visivel
        setVisible(true);    
    }
    public static void main(String[] args) {
        //iniciando arquivo
        new index();
        
    }
    
}