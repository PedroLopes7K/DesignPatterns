# Padrão Prototype

O padrão de protótipo em PHP é um padrão de design criacional que usa objetos existentes para criar seus clones. O padrão é útil quando o aplicativo frequentemente precisa copiar objetos complexos existentes. O padrão delega a replicação aos objetos. 

O aplicativo chama polimorficamente o método clone() nos objetos, e essa é uma vantagem desse design, pois não acopla o código do cliente com classes concretas.