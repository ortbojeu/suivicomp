--
-- Contraintes pour les tables export�es
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `FK_appartenir_id_groupe` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id_groupe`),
  ADD CONSTRAINT `fk_appartenir_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `appeller`
--
ALTER TABLE `appeller`
  ADD CONSTRAINT `FK_appeller_id_contact` FOREIGN KEY (`id_contact`) REFERENCES `contact` (`id_contact`),
  ADD CONSTRAINT `fk_appeller_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `auto_evaluer`
--
ALTER TABLE `auto_evaluer`
  ADD CONSTRAINT `FK_auto_evaluer_id_competence` FOREIGN KEY (`id_competence`) REFERENCES `competence` (`id_competence`),
  ADD CONSTRAINT `fk_auto_evaluer_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaire_competence`
--
ALTER TABLE `commentaire_competence`
  ADD CONSTRAINT `FK_commentaire_competence_id_competence` FOREIGN KEY (`id_competence`) REFERENCES `competence` (`id_competence`);

--
-- Contraintes pour la table `competence`
--
ALTER TABLE `competence`
  ADD CONSTRAINT `FK_competence_id_groupeCompetence` FOREIGN KEY (`id_groupeCompetence`) REFERENCES `groupe_competence` (`id_groupeCompetence`);

--
-- Contraintes pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD CONSTRAINT `FK_contenir_id_competence` FOREIGN KEY (`id_competence`) REFERENCES `competence` (`id_competence`),
  ADD CONSTRAINT `FK_contenir_id_epreuve` FOREIGN KEY (`id_epreuve`) REFERENCES `epreuve` (`id_epreuve`);

--
-- Contraintes pour la table `epreuve`
--
ALTER TABLE `epreuve`
  ADD CONSTRAINT `fk_epreuve_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `evaluer_avec_epreuve`
--
ALTER TABLE `evaluer_avec_epreuve`
  ADD CONSTRAINT `FK_evaluer_avec_epreuve_id_competence` FOREIGN KEY (`id_competence`) REFERENCES `competence` (`id_competence`),
  ADD CONSTRAINT `FK_evaluer_avec_epreuve_id_epreuve` FOREIGN KEY (`id_epreuve`) REFERENCES `epreuve` (`id_epreuve`),
  ADD CONSTRAINT `fk_evaluer_avec_epreuve_users1` FOREIGN KEY (`users_id_eleve`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `evaluer_simplement`
--
ALTER TABLE `evaluer_simplement`
  ADD CONSTRAINT `FK_evaluer_simplement_id_competence` FOREIGN KEY (`id_competence`) REFERENCES `competence` (`id_competence`),
  ADD CONSTRAINT `fk_evaluer_simplement_users1` FOREIGN KEY (`users_id_prof`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluer_simplement_users2` FOREIGN KEY (`users_id_eleve`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `FK_groupe_id_annee` FOREIGN KEY (`id_annee`) REFERENCES `annee` (`id_annee`),
  ADD CONSTRAINT `FK_groupe_id_diplome` FOREIGN KEY (`id_diplome`) REFERENCES `diplome` (`id_diplome`);

--
-- Contraintes pour la table `groupe_competence`
--
ALTER TABLE `groupe_competence`
  ADD CONSTRAINT `FK_groupe_competence_id_matiere` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`);

--
-- Contraintes pour la table `intervient`
--
ALTER TABLE `intervient`
  ADD CONSTRAINT `FK_intervient_id_matiere` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`),
  ADD CONSTRAINT `fk_intervient_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `log_users`
--
ALTER TABLE `log_users`
  ADD CONSTRAINT `log_users_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `FK_possede_id_diplome` FOREIGN KEY (`id_diplome`) REFERENCES `diplome` (`id_diplome`),
  ADD CONSTRAINT `fk_possede_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `suivre`
--
ALTER TABLE `suivre`
  ADD CONSTRAINT `FK_suivre_id_groupe` FOREIGN KEY (`id_groupe`) REFERENCES `groupe` (`id_groupe`),
  ADD CONSTRAINT `FK_suivre_id_matiere` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id_matiere`);
